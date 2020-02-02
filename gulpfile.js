const { src, dest, series, parallel, watch } = require('gulp');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
// const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const cssnano = require('cssnano');
// const named = require('vinyl-named');
// const compiler = require('webpack');
// const webpack = require('webpack-stream');

function serve() {
    browserSync.init({
        server: { baseDir: './public' },
        notify: false,
        open: false
    });

    watch('assets/img/**/*', generateIMG);
    watch(['assets/sass/**/*.scss', 'assets/css/**/*.css'], generateCSS);
    watch('assets/js/**/*.js', generateJS);
    watch('public/**/*.html').on('change', browserSync.reload);
}


function generateCSS() {
    return src('assets/sass/**/*.scss')
        // .pipe(sourcemaps.init({ largeFile: true }))
        .pipe(sass().on('error', sass.logError))
        .pipe(src('assets/css/**/*.css'))
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        // .pipe(rename({ extname: '.min.css' }))
        // .pipe(sourcemaps.write('.'))
        .pipe(dest('public/assets/css/'))
        .pipe(browserSync.stream());
}


function generateJS() {
    return src('assets/js/*.js')
        /* .pipe(named())
        .pipe(webpack({
            output: { filename: '[name].bundle.js' },
            mode: 'production',
            // devtool: 'source-map',
            module: {
                rules: [{
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env', '@babel/preset-react']
                        }
                    }
                }]
             }
        }, compiler)) */
        .pipe(uglify())
        .pipe(dest('public/assets/js/'))
        .pipe(browserSync.stream());
}


function generateIMG() {
    return src('assets/img/**/*')
        .pipe(imagemin({ verbose: true }))
        .pipe(dest('public/assets/img/'));
}


exports.watch = exports.serve = serve;
exports.default = series(parallel(
    generateCSS,
    generateJS,
    generateIMG
))
