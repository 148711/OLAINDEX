<?php

namespace App\Console\Commands\OneDrive;

use Illuminate\Console\Command;

class ListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'od:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->warn('OLAINDEX Console Command');
        $header = ['command', 'description', 'params'];
        $list = [

            ['od:download', '下载文件', '{remote}'],
            ['od:mkdir', '新建目录', '{remote}'],
            ['od:mv', '移动项目', '{local} {remote}'],
            ['od:delete', '删除项目', '{remote}'],
            ['od:share', '分享直链', '{remote}'],
            ['od:direct', '永久直链', '{remote}'],
            ['od:copy', '复制文件', '{local} {remote}'],
            ['od:upload', '上传文件', '{local} {remote} {--chuck=}'],
            ['od:info', '使用信息', ''],
            ['od:reset', '重置应用', ''],
            ['od:logout', '登出账户', ''],
            ['od:password', '重置密码', ''],
            ['od:update', '更新升级', ''],
            ['od:install', '初始安装', ''],
            ['od:switch', '转换版本', ''],
        ];
        $this->table($header, $list);
    }
}
