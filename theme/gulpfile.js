var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

var config = {
    bootstrapDir: './bower_components/bootstrap-sass',
    jqueryDir: './bower_components/jquery',
    publicDir: './public',
};

gulp.task('css', function () {
    return gulp.src('./css/app.scss')
        .pipe(sass({
            includePaths: [config.bootstrapDir + '/assets/stylesheets'],
        }))
        .pipe(gulp.dest(config.publicDir + '/css'));
});

gulp.task('fonts', function () {
    return gulp.src(config.bootstrapDir + '/assets/fonts/**/*')
        .pipe(gulp.dest(config.publicDir + '/fonts'));
});

gulp.task('javascripts', function () {
    return gulp.src([
        config.jqueryDir + '/dist/jquery.js',
        config.bootstrapDir + '/assets/javascripts/bootstrap.js'
    ], { base: 'bower_components/' })
        .pipe(concat('app.js'))
        .pipe(gulp.dest(config.publicDir + "/javascript"))
});

gulp.task('default', gulp.parallel(['css', 'fonts', 'javascripts']));

gulp.task('watch', function () {
    gulp.watch(['./css/*.scss'], ['css']);
});