<?php
# $Id$
# Test: stackedbars with labels, top labels only
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => "\nData Labels (top only)", # Title part 2
  'ydatalabel' => 'plotin',     # Y data label position, NULL to skip
  'edgedata' => True,      # If true, use some low vals (0s and 1s) in the data
);
require 'stackedbars.php';
