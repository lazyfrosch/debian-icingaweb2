<?php
/* Icinga Web 2 | (c) 2013-2015 Icinga Development Team | GPLv2+ */

namespace Icinga\Data;

use Countable;

interface QueryInterface extends Fetchable, Filterable, Limitable, Sortable, Countable {};
