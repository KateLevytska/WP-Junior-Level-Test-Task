// Include Packages
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const browsersync = require('browser-sync');

const SITE_LINK = "http://testtask.local/";
/* -------------------------------------------------- */
// Watches
gulp.task('sync', function () {
	browsersync({
		proxy: SITE_LINK,
		notify: false,
	});
	gulp.watch('scss/*.scss', gulp.series('create-css-file'));
	gulp.watch('../**/*.php').on("change", browsersync.reload);
	gulp.watch('js/*.js', gulp.series('create-js-file')).on("change", browsersync.reload);
});
// Convert sass file to css
gulp.task('create-css-file', function () {
	return gulp.src('scss/*')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['last 15 versions'] }))
		.pipe(cleancss())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('../'))
		.pipe(browsersync.stream());

});
/* -------------------------------------------------- */
// Create js file
gulp.task('create-js-file', function () {
	return gulp.src('js/*')
		.pipe(sourcemaps.init())
		.pipe(concat('scripts.min.js'))
		.pipe(uglify())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('../'));
});
/* -------------------------------------------------- */
// Create library css
gulp.task('concat-css', function () {
	return gulp.src('extend/css/*')
		.pipe(sourcemaps.init())
		.pipe(concat('extend.min.css'))
		.pipe(cleancss())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('../'));
});
/* -------------------------------------------------- */
// Create library js
gulp.task('concat-js', function () {
	return gulp.src('extend/js/*.js')
		.pipe(sourcemaps.init())
		.pipe(concat('extend.min.js'))
		.pipe(uglify())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('../'));
});
/* -------------------------------------------------- */
// Concat all
gulp.task('concat-all', gulp.series('concat-css', 'concat-js'));
/* -------------------------------------------------- */
// Main Task
gulp.task('default', gulp.series('create-css-file', 'create-js-file', 'sync'));


