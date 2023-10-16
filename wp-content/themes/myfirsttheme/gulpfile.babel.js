import gulp from "gulp";
import yargs from "yargs";
const sass = require('gulp-sass')(require('sass'));
import cssnano from "gulp-cssnano";
import gulpif from "gulp-if";
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';

const PRODUCTION = yargs.argv.prod;

const FolderPaths = {
    styles: {
        src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
        dest: 'dist/assets/css'
    }, 
    images: {
        src: 'src/assets/images/**/*.{jpg,png,gif,webp,tiff,jpeg,svg}',
        dest: 'dist/assets/images'
    }
}
// Style Optimization
export const styles = () => {
    return gulp.src(FolderPaths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('ScssError', sass.logError))
        // Only minify in  production (gulp styles -- prod)
        .pipe(gulpif(PRODUCTION, cssnano()))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(gulp.dest(FolderPaths.styles.dest));
}

// Image Optimization
export const themeimagesmin = () => {
    return gulp.src(FolderPaths.images.src)
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(gulp.dest(FolderPaths.images.dest));
}

// Watch Task
export const watch = () => {
    gulp.watch('src/assets/scss/**/*.scss', styles);
}

// export default hello;