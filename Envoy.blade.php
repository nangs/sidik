@servers([
    'lms'   => 'mias@103.8.122.13',
    'mias'  => 'mias@103.247.41.45:8704'
])

@task('pull', ['on' => ['lms', 'mias'], 'confirm' => false])
    cd sidik
    git pull https://github.com/udibagas/sidik.git
    php artisan migrate
@endtask
