<?php
/**
 * Studio functions
 *
 * Contains functions for working with video studios
 * moved from functions.php to studios.php
 *
 * @package Core
 * @author  Alex stevens    <huya1010@gmail.com>
 * @version $Id: studios.php,v 1.14 2015/10/6 10:59:52 veal Exp $
 */

/**
 * Map movie studios to versions existing in db
 *
 * @author  Alex stevens    <huya1010@gmail.com>
 * @param   array $studios   A list of input studios
 * @return  array           The mapped studios result array
 */
function mapstudios($studios)
{
    global $dbstudios;

    // load studios from DB once
    if (empty($dbstudios)) 
    {
        $dbstudios = array();
        foreach (runSQL('SELECT id, name FROM '.TBL_STUDIOS.' ORDER BY name') as $row) 
        {
            $dbstudios[] = $row['name'];
        }
    }

    foreach ($studios as $in_studio)
    {
        $mapped_studio  = '';
        $mapped_percent  = 0;

		$in_studio = trim($in_studio);
		
        // direct match?
        if (in_array($in_studio, $dbstudios)) 
        {
            $studs[] = $in_studio;
        }
        else
        {
            // possible approximate match
            foreach ($dbstudios as $studio_name) 
            {
                // calculate similiarity and find best match
                $chars = similar_text($in_studio, $studio_name, $percent);
                if ($percent >= 50) 
                {
                    if (stristr($in_studio, $studio_name)) $percent += 10;
                    if ($percent > $mapped_percent) 
                    {
                        $mapped_studio   = $studio_name;
                        $mapped_percent = $percent;
                    }
                }
            }
            if ($mapped_studio) $studs[] = $mapped_studio;
        }
    }

    return array_unique($studs);
}

/**
 * returns the studioID for a given name from the 'studios' table
 *
 * @todo                  check if this can be moved to edit.php
 * @param  string  $name  the name of the studio
 * @return integer $studio the studio id
 */
function getStudioId($name)
{
	$name   = addslashes($name);
    $result = runSQL("SELECT id FROM ".TBL_STUDIOS." WHERE LCASE(name) = LCASE('".$name."')");
	return $result[0]['id'];
}

/**
 * retrieve studio ids/ studios of a video
 *
 * @param   integer $id     ID of the video
 * @param   boolean $names  include studio names in output
 * @return  array           studio id's OR
 * @return  array           associative array of studio ids and names
 */
function getItemstudios($id, $names = false)
{
    $studios = array();
    if (empty($id)) return $studios;
    
    $SELECT = 'SELECT studios.id, studios.name
                 FROM '.TBL_STUDIOS.' AS studios, '.TBL_VIDEOSTUDIO.' AS videostudio
                WHERE studios.id = videostudio.studio_id
                  AND videostudio.video_id = '.$id;
    $result = runSQL($SELECT);

    if ($names) return $result;
    
    foreach ($result as $row)
    {
        $studios[] = $row['id'];
    }    

    return $studios;
}

/**
 * save studios for a movie
 *
 * @todo                  check if this can be moved to edit.php
 * @param integer $id     ID of the video
 * @param array   $studios studio IDs
 */
function setItemstudios($id, $studios)
{
    runSQL('DELETE FROM '.TBL_VIDEOSTUDIO.' WHERE video_id = '.$id);

	if (count($studios))
    {
        $studios = array_unique($studios);

        foreach($studios as $studio)
        {
            runSQL('INSERT INTO '.TBL_VIDEOSTUDIO.' SET video_id = '.$id.', studio_id = '.$studio);
        }
    }
}

?>
