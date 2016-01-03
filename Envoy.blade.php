@servers([ 'lms' => 'mias@103.8.122.13', 'mias' => 'mias@103.247.41.45 -p 8704'])

@task('pull', ['on' => ['lms'], 'confirm' => false])
    cd sidik
    git pull https://github.com/udibagas/sidik.git
    php artisan migrate
@endtask

@task('up', ['on' => ['lms', 'mias'], 'confirm' => false])
    cd sidik
    php artisan up
@endtask

@task('down', ['on' => ['lms', 'mias'], 'confirm' => false])
    cd sidik
    php artisan down
@endtask
