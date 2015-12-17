@servers(['lms' => 'mias@103.8.122.13'])

@task('pull', ['on' => 'lms', 'confirm' => false])
    cd sidik
    git pull https://github.com/udibagas/sidik.git
    php artisan migrate
@endtask