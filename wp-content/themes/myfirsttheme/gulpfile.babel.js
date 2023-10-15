import { Gulp } from "gulp";

export const hello = (cb) => {
    console.log('hi');
    cb();
}

export default hello;