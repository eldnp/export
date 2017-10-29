<?php
/*
 * This file is part of Eldnp/export.
 *
 * Eldnp/export is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Eldnp/export is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Eldnp/export.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @see       https://github.com/eldnp/export for the canonical source repository
 * @copyright Copyright (c) %regexp:(20\d{2}-)?20\d{2}% Oleg Verevskoy <verevskoy@gmail.com>
 * @license   https://github.com/eldnp/export/blob/master/LICENSE GNU GENERAL PUBLIC LICENSE Version 3
 */

namespace Eldnp\Export;

/**
 * Interface ExporterInterface
 *
 * @package Eldnp\Export
 */
interface ExporterInterface
{
    /**
     * @param DataSourceInterface $dataSource
     * @param WriterInterface $writer
     *
     * @return void
     */
    public function export(DataSourceInterface $dataSource, WriterInterface $writer);
}
