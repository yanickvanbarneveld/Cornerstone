var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');

gulp.task('default', ['sass']);

gulp.task('sass', function () {
  	return gulp.src('./assets/scss/cornerstone.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(minifyCss())
		.pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function () {
	gulp.watch('./assets/scss/*.scss', ['sass']);
});
