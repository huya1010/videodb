<?php
/**
 * Video functions
 *
 * Contains functions for working with video Videos
 *
 * @package Core
 * @author  Alex Stevens    <huya1010@gmail.com>
 * @version $Id: Videos.php,v 1.14 2015/10/6 10:59:52 veal Exp $
 */

/**
 * Map movie Videos to versions existing in db
 *
 * @author  Alex stevens    <huya1010@gmail.com>
 * @param   array $Videos   A list of input Videos
 * @return  array           The mapped Videos result array
 */
function mapVideos($Videos)
{
    global $dbVideos;

    // load Videos from DB once
    if (empty($dbVideos)) 
    {
        $dbVideos = array();
        foreach (runSQL('SELECT id, name FROM '.TBL_VIDEODATA.' ORDER BY name') as $row) 
        {
            $dbVideos[] = $row['name'];
        }
    }

    foreach ($Videos as $in_Video)
    {
        $mapped_Video  = '';
        $mapped_percent  = 0;

		$in_Video = trim($in_Video);
		
        // direct match?
        if (in_array($in_Video, $dbVideos)) 
        {
            $studs[] = $in_Video;
        }
        else
        {
            // possible approximate match
            foreach ($dbVideos as $Video_name) 
            {
                // calculate similiarity and find best match
                $chars = similar_text($in_Video, $Video_name, $percent);
                if ($percent >= 50) 
                {
                    if (stristr($in_Video, $Video_name)) $percent += 10;
                    if ($percent > $mapped_percent) 
                    {
                        $mapped_Video   = $Video_name;
                        $mapped_percent = $percent;
                    }
                }
            }
            if ($mapped_Video) $studs[] = $mapped_Video;
        }
    }

    return array_unique($studs);
}

/**
 * returns the VideoID for a given name from the 'Videos' table
 *
 * @todo                  check if this can be moved to edit.php
 * @param  string  $name  the name of the Video
 * @return integer $Video the Video id
 */
function getVideoId($name)
{
	$name   = addslashes($name);
    $result = runSQL("SELECT id FROM ".TBL_VIDEODATA." WHERE LCASE(name) = LCASE('".$name."')");
	return $result[0]['id'];
}

/**
 * retrieve Video ids/ Videos of a video
 *
 * @param   integer $id     ID of the video
 * @param   boolean $names  include Video names in output
 * @return  array           Video id's OR
 * @return  array           associative array of Video ids and names
 */
function getItemVideos($id, $onlyId = true)
{
    $Videos = array();
    if (empty($id)) return $Videos;
    
    $SELECT = 'SELECT Videos.id, Videos.imgurl, Videos.title, Videos.subtitle, Videos.year  
                 FROM '.TBL_DATA.' AS Videos, '.TBL_VIDEOSTUDIO.' AS videoStudio
                WHERE Videos.id = videoStudio.Video_id
                  AND videoStudio.Studio_id = '.$id;
    $result = runSQL($SELECT);

    //$list[$i]['imgurl'] = ($config['thumbnail']) ? getThumbnail($list[$i]['imgurl']) : '';


    if (!$onlyId) return $result;
    
    foreach ($result as $row)
    {
        $Videos[] = $row['id'];
    }    

    return $Videos;
}

/**
 * save Videos for a movie
 *
 * @todo                  check if this can be moved to edit.php
 * @param integer $id     ID of the video
 * @param array   $Videos Video IDs
 */
function setItemVideos($id, $Videos)
{
    runSQL('DELETE FROM '.TBL_VIDEOVideo.' WHERE video_id = '.$id);

	if (count($Videos))
    {
        $Videos = array_unique($Videos);

        foreach($Videos as $Video)
        {
            runSQL('INSERT INTO '.TBL_VIDEOVideo.' SET video_id = '.$id.', Video_id = '.$Video);
        }
    }
}

?>
