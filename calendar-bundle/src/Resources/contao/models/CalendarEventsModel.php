<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao;


/**
 * Reads and writes events
 *
 * @property integer $id
 * @property integer $pid
 * @property integer $tstamp
 * @property string  $title
 * @property string  $alias
 * @property integer $author
 * @property boolean $addTime
 * @property integer $startTime
 * @property integer $endTime
 * @property integer $startDate
 * @property integer $endDate
 * @property string  $location
 * @property string  $teaser
 * @property boolean $addImage
 * @property string  $singleSRC
 * @property string  $alt
 * @property string  $size
 * @property string  $imagemargin
 * @property string  $imageUrl
 * @property boolean $fullsize
 * @property string  $caption
 * @property string  $floating
 * @property boolean $recurring
 * @property string  $repeatEach
 * @property integer $repeatEnd
 * @property integer $recurrences
 * @property boolean $addEnclosure
 * @property string  $enclosure
 * @property string  $source
 * @property integer $jumpTo
 * @property integer $articleId
 * @property string  $url
 * @property boolean $target
 * @property string  $cssClass
 * @property boolean $noComments
 * @property boolean $published
 * @property string  $start
 * @property string  $stop
 *
 * @method static $this findById()
 * @method static $this findOneByPid()
 * @method static $this findOneByTstamp()
 * @method static $this findOneByTitle()
 * @method static $this findOneByAlias()
 * @method static $this findOneByAuthor()
 * @method static $this findOneByAddTime()
 * @method static $this findOneByStartTime()
 * @method static $this findOneByEndTime()
 * @method static $this findOneByStartDate()
 * @method static $this findOneByEndDate()
 * @method static $this findOneByLocation()
 * @method static $this findOneByTeaser()
 * @method static $this findOneByAddImage()
 * @method static $this findOneBySingleSRC()
 * @method static $this findOneByAlt()
 * @method static $this findOneBySize()
 * @method static $this findOneByImagemargin()
 * @method static $this findOneByImageUrl()
 * @method static $this findOneByFullsize()
 * @method static $this findOneByCaption()
 * @method static $this findOneByFloating()
 * @method static $this findOneByRecurring()
 * @method static $this findOneByRepeatEach()
 * @method static $this findOneByRepeatEnd()
 * @method static $this findOneByRecurrences()
 * @method static $this findOneByAddEnclosure()
 * @method static $this findOneByEnclosure()
 * @method static $this findOneBySource()
 * @method static $this findOneByJumpTo()
 * @method static $this findOneByArticleId()
 * @method static $this findOneByUrl()
 * @method static $this findOneByTarget()
 * @method static $this findOneByCssClass()
 * @method static $this findOneByNoComments()
 * @method static $this findOneByPublished()
 * @method static $this findOneByStart()
 * @method static $this findOneByStop()
 * @method static \CalendarEventsModel[]|\Model\Collection findByPid()
 * @method static \CalendarEventsModel[]|\Model\Collection findByTstamp()
 * @method static \CalendarEventsModel[]|\Model\Collection findByTitle()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAlias()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAuthor()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAddTime()
 * @method static \CalendarEventsModel[]|\Model\Collection findByStartTime()
 * @method static \CalendarEventsModel[]|\Model\Collection findByEndTime()
 * @method static \CalendarEventsModel[]|\Model\Collection findByStartDate()
 * @method static \CalendarEventsModel[]|\Model\Collection findByEndDate()
 * @method static \CalendarEventsModel[]|\Model\Collection findByLocation()
 * @method static \CalendarEventsModel[]|\Model\Collection findByTeaser()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAddImage()
 * @method static \CalendarEventsModel[]|\Model\Collection findBySingleSRC()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAlt()
 * @method static \CalendarEventsModel[]|\Model\Collection findBySize()
 * @method static \CalendarEventsModel[]|\Model\Collection findByImagemargin()
 * @method static \CalendarEventsModel[]|\Model\Collection findByImageUrl()
 * @method static \CalendarEventsModel[]|\Model\Collection findByFullsize()
 * @method static \CalendarEventsModel[]|\Model\Collection findByCaption()
 * @method static \CalendarEventsModel[]|\Model\Collection findByFloating()
 * @method static \CalendarEventsModel[]|\Model\Collection findByRecurring()
 * @method static \CalendarEventsModel[]|\Model\Collection findByRepeatEach()
 * @method static \CalendarEventsModel[]|\Model\Collection findByRepeatEnd()
 * @method static \CalendarEventsModel[]|\Model\Collection findByRecurrences()
 * @method static \CalendarEventsModel[]|\Model\Collection findByAddEnclosure()
 * @method static \CalendarEventsModel[]|\Model\Collection findByEnclosure()
 * @method static \CalendarEventsModel[]|\Model\Collection findBySource()
 * @method static \CalendarEventsModel[]|\Model\Collection findByJumpTo()
 * @method static \CalendarEventsModel[]|\Model\Collection findByArticleId()
 * @method static \CalendarEventsModel[]|\Model\Collection findByUrl()
 * @method static \CalendarEventsModel[]|\Model\Collection findByTarget()
 * @method static \CalendarEventsModel[]|\Model\Collection findByCssClass()
 * @method static \CalendarEventsModel[]|\Model\Collection findByNoComments()
 * @method static \CalendarEventsModel[]|\Model\Collection findByPublished()
 * @method static \CalendarEventsModel[]|\Model\Collection findByStart()
 * @method static \CalendarEventsModel[]|\Model\Collection findByStop()
 * @method static integer countById()
 * @method static integer countByPid()
 * @method static integer countByTstamp()
 * @method static integer countByTitle()
 * @method static integer countByAlias()
 * @method static integer countByAuthor()
 * @method static integer countByAddTime()
 * @method static integer countByStartTime()
 * @method static integer countByEndTime()
 * @method static integer countByStartDate()
 * @method static integer countByEndDate()
 * @method static integer countByLocation()
 * @method static integer countByTeaser()
 * @method static integer countByAddImage()
 * @method static integer countBySingleSRC()
 * @method static integer countByAlt()
 * @method static integer countBySize()
 * @method static integer countByImagemargin()
 * @method static integer countByImageUrl()
 * @method static integer countByFullsize()
 * @method static integer countByCaption()
 * @method static integer countByFloating()
 * @method static integer countByRecurring()
 * @method static integer countByRepeatEach()
 * @method static integer countByRepeatEnd()
 * @method static integer countByRecurrences()
 * @method static integer countByAddEnclosure()
 * @method static integer countByEnclosure()
 * @method static integer countBySource()
 * @method static integer countByJumpTo()
 * @method static integer countByArticleId()
 * @method static integer countByUrl()
 * @method static integer countByTarget()
 * @method static integer countByCssClass()
 * @method static integer countByNoComments()
 * @method static integer countByPublished()
 * @method static integer countByStart()
 * @method static integer countByStop()
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class CalendarEventsModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_calendar_events';


	/**
	 * Find a published event from one or more calendars by its ID or alias
	 *
	 * @param mixed $varId      The numeric ID or alias name
	 * @param array $arrPids    An array of calendar IDs
	 * @param array $arrOptions An optional options array
	 *
	 * @return static The model or null if there is no event
	 */
	public static function findPublishedByParentAndIdOrAlias($varId, $arrPids, array $arrOptions=array())
	{
		if (!is_array($arrPids) || empty($arrPids))
		{
			return null;
		}

		$t = static::$strTable;
		$arrColumns = array("($t.id=? OR $t.alias=?) AND $t.pid IN(" . implode(',', array_map('intval', $arrPids)) . ")");

		if (!BE_USER_LOGGED_IN)
		{
			$time = time();
			$arrColumns[] = "($t.start='' OR $t.start<$time) AND ($t.stop='' OR $t.stop>$time) AND $t.published=1";
		}

		return static::findOneBy($arrColumns, array((is_numeric($varId) ? $varId : 0), $varId), $arrOptions);
	}


	/**
	 * Find events of the current period by their parent ID
	 *
	 * @param integer $intPid     The calendar ID
	 * @param integer $intStart   The start date as Unix timestamp
	 * @param integer $intEnd     The end date as Unix timestamp
	 * @param array   $arrOptions An optional options array
	 *
	 * @return static[]|\Model\Collection|null A collection of models or null if there are no events
	 */
	public static function findCurrentByPid($intPid, $intStart, $intEnd, array $arrOptions=array())
	{
		$t = static::$strTable;
		$intStart = intval($intStart);
		$intEnd = intval($intEnd);

		$arrColumns = array("$t.pid=? AND (($t.startTime>=$intStart AND $t.startTime<=$intEnd) OR ($t.endTime>=$intStart AND $t.endTime<=$intEnd) OR ($t.startTime<=$intStart AND $t.endTime>=$intEnd) OR ($t.recurring=1 AND ($t.recurrences=0 OR $t.repeatEnd>=$intStart) AND $t.startTime<=$intEnd))");

		if (!BE_USER_LOGGED_IN)
		{
			$time = time();
			$arrColumns[] = "($t.start='' OR $t.start<$time) AND ($t.stop='' OR $t.stop>$time) AND $t.published=1";
		}

		if (!isset($arrOptions['order']))
		{
			$arrOptions['order']  = "$t.startTime";
		}

		return static::findBy($arrColumns, $intPid, $arrOptions);
	}


	/**
	 * Find published events with the default redirect target by their parent ID
	 *
	 * @param integer $intPid     The calendar ID
	 * @param array   $arrOptions An optional options array
	 *
	 * @return static[]|\Model\Collection|null A collection of models or null if there are no events
	 */
	public static function findPublishedDefaultByPid($intPid, array $arrOptions=array())
	{
		$t = static::$strTable;
		$arrColumns = array("$t.pid=? AND $t.source='default'");

		if (!BE_USER_LOGGED_IN)
		{
			$time = time();
			$arrColumns[] = "($t.start='' OR $t.start<$time) AND ($t.stop='' OR $t.stop>$time) AND $t.published=1";
		}

		if (!isset($arrOptions['order']))
		{
			$arrOptions['order']  = "$t.startTime DESC";
		}

		return static::findBy($arrColumns, $intPid, $arrOptions);
	}


	/**
	 * Find upcoming events by their parent IDs
	 *
	 * @param array   $arrIds     An array of calendar IDs
	 * @param integer $intLimit   An optional limit
	 * @param array   $arrOptions An optional options array
	 *
	 * @return static[]|null A collection of models or null if there are no events
	 */
	public static function findUpcomingByPids($arrIds, $intLimit=0, array $arrOptions=array())
	{
		if (!is_array($arrIds) || empty($arrIds))
		{
			return null;
		}

		$time = time();
		$t = static::$strTable;

		// Get upcoming events using endTime instead of startTime (see #3917)
		$arrColumns = array("($t.endTime>=$time OR ($t.recurring=1 AND ($t.recurrences=0 OR $t.repeatEnd>=$time))) AND $t.pid IN(" . implode(',', array_map('intval', $arrIds)) . ") AND ($t.start='' OR $t.start<$time) AND ($t.stop='' OR $t.stop>$time) AND $t.published=1");

		if ($intLimit > 0)
		{
			$arrOptions['limit'] = $intLimit;
		}

		if (!isset($arrOptions['order']))
		{
			$arrOptions['order'] = "$t.startTime";
		}

		return static::findBy($arrColumns, null, $arrOptions);
	}
}
