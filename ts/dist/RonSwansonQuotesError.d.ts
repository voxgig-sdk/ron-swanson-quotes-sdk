import { Context } from './Context';
declare class RonSwansonQuotesError extends Error {
    isRonSwansonQuotesError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { RonSwansonQuotesError };
