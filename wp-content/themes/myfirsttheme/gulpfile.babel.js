import gulp from "gulp";
import yargs from "yargs";
const sass = require('gulp-sass')(require('sass'));
import cssnano from "gulp-cssnano";
//const clean = require('gulp-clean');

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass().on('ScssError', sass.logError))
        //.pipe(clean())
        .pipe(cssnano())
        .pipe(gulp.dest('dist/assets/css'));
}

// export default hello;