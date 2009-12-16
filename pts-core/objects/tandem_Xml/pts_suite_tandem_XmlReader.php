<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2008 - 2009, Phoronix Media
	Copyright (C) 2004 - 2009, Michael Larabel
	pts_suite_tandem_XmlReader.php: The XML reading object for the Phoronix Test Suite for test suites

	Additional Notes: A very simple XML parser with a few extras... Does not currently support attributes on tags, etc.
	A work in progress. This was originally designed for just some select needs in the past. No XML validation is done with this parser, etc.

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class pts_suite_tandem_XmlReader extends tandem_XmlReader
{
	public function __construct($read_xml)
	{
		if(!is_file($read_xml) || substr($read_xml, -3) != "xml")
		{
			$read_xml = pts_location_suite($read_xml);
		}

		parent::__construct($read_xml);
	}
}
?>
