<?php

/*
 * This file is part of the Webception package.
 *
 * (c) James Healey <jayhealey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$I = new WebGuy($scenario);
$I->wantTo('run a passing test');
$I->amOnPage('run/acceptance/'. md5('acceptance' . 'TheTestThatPasses'));
$I->see('"run":true,"passed":true,"state":"passed"');
