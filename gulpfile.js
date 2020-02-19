const { src, dest, series, parallel, watch } = require('gulp');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
// const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
// const named = require('vinyl-named');
// const compiler = require('webpack');
// const webpack = require('webpack-stream');

const basePath = "public/wp-content/themes/nill";

function serve() {
    watch(`${basePath}/assets/img/**/*`, generateIMG);
    watch([`${basePath}/assets/sass/**/*.scss`, `${basePath}/assets/css/**/*.css`], generateCSS);
    watch(`${basePath}/assets/js/**/*.js`, generateJS);
}


function generateCSS() {
    return src(`${basePath}/assets/sass/**/*.scss`)
        // .pipe(sourcemaps.init({ largeFile: true }))
        .pipe(sass().on('error', sass.logError))
        .pipe(src(`${basePath}/assets/css/**/*.css`))
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        // .pipe(rename({ extname: '.min.css' }))
        // .pipe(sourcemaps.write('.'))
        .pipe(dest(`${basePath}/public/assets/css/`))
        .pipe(browserSync.stream());
}


function generateJS() {
    return src(`${basePath}/assets/js/*.js`)
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
        .pipe(dest(`${basePath}/public/assets/js/`))
        .pipe(browserSync.stream());
}


function generateIMG() {
    return src(`${basePath}/assets/img/**/*`)
        .pipe(imagemin({ verbose: true }))
        .pipe(dest(`${basePath}/public/assets/img/`));
}


exports.watch = exports.serve = serve;
exports.default = series(parallel(
    generateCSS,
    generateJS,
    generateIMG
))
