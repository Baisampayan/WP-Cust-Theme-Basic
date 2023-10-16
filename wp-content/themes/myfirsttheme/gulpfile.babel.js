import gulp, { watch } from "gulp";
import yargs from "yargs";
const sass = require('gulp-sass')(require('sass'));
import cssnano from "gulp-cssnano";
import gulpif from "gulp-if";
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from "del";

const PRODUCTION = yargs.argv.prod;

// Folder Paths
const FolderPaths = {
    styles: {
        src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
        dest: 'dist/assets/css'
    }, 
    images: {
        src: 'src/assets/images/**/*.{jpg,png,gif,webp,tiff,jpeg,svg}',
        dest: 'dist/assets/images'
    }, 
    others: {
        src: ['src/assets/**/*', '!src/assets/{images,js,scss}', '!src/assets/{images,js,scss}/**/*'],
        dest: 'dist/assets/'
    }
}
// Style Optimization
export const themestyles = () => {
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

// Coping all files except Images, JavaScript, and SCSS
export const themecopy = () => {
    return gulp.src(FolderPaths.others.src)
        .pipe(gulp.dest(FolderPaths.others.dest));
}

// Cleaning content from Dist Folder
export const themeclean = () => {
    return del(['dist']);
}

// Watch Task
export const themewatch = () => {
    gulp.watch('src/assets/scss/**/*.scss', themestyles);
    gulp.watch(FolderPaths.images.src, themeimagesmin);
    gulp.watch(FolderPaths.others.src, themecopy);
}

// Creating Built Task
export const devbuilt = gulp.series(themeclean, gulp.parallel(themestyles, themeimagesmin, themecopy), themewatch);
export const themebuilt = gulp.series(themeclean, gulp.parallel(themestyles, themeimagesmin, themecopy));

export default devbuilt;