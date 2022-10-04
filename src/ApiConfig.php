<?php
namespace Zmengle\GitlabApi;

class ApiConfig
{
    /**
     * 定义请求方式
     * get|post|put|delete
     */
    const REQUEST_GET = 'GET';
    const REQUEST_POST = 'POST';
    const REQUEST_PUT = 'PUT';
    const REQUEST_DELETE = 'DELETE';

    /**
     * 定义路由前缀
     */
    const API = 'api';

    /**
     * 定义版本
     */
    const VERSION = 'V4';

    /**
     * 定义对象
     */
    const PROJECT = 'projects';
    const USERS = 'users';
}