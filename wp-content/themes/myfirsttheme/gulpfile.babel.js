import gulp from "gulp";
import yargs from "yargs";
const sass = require('gulp-sass')(require('sass'));

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass().on('ScssError', sass.logError))
        .pipe(gulp.dest('dist/assets/css'));
}

// export default hello;