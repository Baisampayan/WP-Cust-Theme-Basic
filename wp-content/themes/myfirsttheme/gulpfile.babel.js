import gulp from "gulp";
import yargs from "yargs";
const sass = require('gulp-sass')(require('sass'));
import cssnano from "gulp-cssnano";
import gulpif from "gulp-if";
import sourcemaps from 'gulp-sourcemaps';
//const clean = require('gulp-clean');

const PRODUCTION = yargs.argv.prod;

const FolderPaths = {
    styles: {
        src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
        dest: 'dist/assets/css'
    }
}

export const styles = () => {
    return gulp.src(FolderPaths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('ScssError', sass.logError))
        //.pipe(clean())
        // Only minify in  production (gulp styles -- prod)
        .pipe(gulpif(PRODUCTION, cssnano()))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(gulp.dest(FolderPaths.styles.dest));
}

// export default hello;