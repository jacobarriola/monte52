var gulp 			= require('gulp'),
	browserSync		= require('browser-sync'),			// live reload
	autoprefixer	= require('gulp-autoprefixer'),		// add missing vendor prefixes and remove uneccessary
	rename			= require('gulp-rename'),			// for adding 'min' suffix to build directory
	notify			= require('gulp-notify'),			// adding notifications
	minifyCSS		= require('gulp-minify-css');		// minify css files


// Browser reload upon file changes
gulp.task('browser-sync', function() {
    browserSync({
    	files: ["build/*.css", "*.html"], // watch css and html files
        server: {
            baseDir: "./"
        }
    });
});

// CSS auto-prefix, rename and minify then send to build directory
gulp.task('styles', function(){
	return gulp.src('css/app.css')
		.pipe(autoprefixer({ browsers: ['last 2 versions']}))
		.pipe(rename({ suffix: '-min'}))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./build'))
		.pipe(notify("Styles task completed"));
});

// have gulp watch main css file to run gulp tasks
gulp.task('watch', function() {
	// watch Compass-compiled css
	gulp.watch('css/app.css', ['styles'])
});

// default gulp task
gulp.task('default', ['browser-sync', 'watch']);