<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'steve_wordpress');

// Project repository
set('repository', 'git@github.com:punkrocker178/wp-test.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 
set('http_user', 'stevele');
set('writable_use_sudo', true);
set('cleanup_use_sudo', true);

// Shared files/dirs between deploys 
set('shared_files', [
    "docker-compose.yml",
    ".env",
    "wp-config.php"
]);
set('shared_dirs', [
    "docker/database",
    "docker/logs",
    "wp-content/uploads"
]);

// Writable dirs by web server 
set('writable_dirs', [
    "docker/database",
    "wp-content/uploads"
]);


// Hosts
inventory('.deployment/hosts.yml');
// host('project.com')
//     ->set('deploy_path', '~/{{application}}');    
    

// Tasks

task('stop-docker', function() {
    write('Before release');
    cd('{{deploy_path}}/current');
    run('docker-compose down');
});

task('start-docker', function() {
    cd('{{deploy_path}}/current');
    run('docker-compose up -d');
});

before('deploy:release', 'stop-docker');


desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    // 'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

after('deploy', 'start-docker');

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
