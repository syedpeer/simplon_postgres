<?php

namespace Simplon\Postgres\Crud;

/**
 * Interface PgSqlCrudInterface
 * @package Simplon\Postgres\Crud
 * @author Tino Ehrich (tino@bigpun.me)
 */
interface PgSqlCrudInterface
{
    /**
     * @return string
     */
    public static function crudGetSource();

    /**
     * @return string
     */
    public function crudGetQuery();

    /**
     * @return array
     */
    public function crudColumns();

    /**
     * @return array
     */
    public function crudIgnore();

    /**
     * @param bool $isCreateEvent
     *
     * @return bool
     */
    public function crudBeforeSave($isCreateEvent);

    /**
     * @param bool $isCreateEvent
     *
     * @return bool
     */
    public function crudAfterSave($isCreateEvent);
} 