import { Gulp } from "gulp";
import yargs from "yargs";

const PRODUCTION = yargs.argv.prod;

export const hello = (cb) => {
    console.log(PRODUCTION);
    cb();
}

export default hello;