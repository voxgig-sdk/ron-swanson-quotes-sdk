import { RonSwansonQuotesEntityBase } from '../RonSwansonQuotesEntityBase';
import type { RonSwansonQuotesSDK } from '../RonSwansonQuotesSDK';
import type { Control } from '../types';
import type { Schema, SchemaLoadMatch } from '../RonSwansonQuotesTypes';
declare class SchemaEntity extends RonSwansonQuotesEntityBase<Schema> {
    constructor(client: RonSwansonQuotesSDK, entopts: any);
    make(this: SchemaEntity): SchemaEntity;
    load(this: any, reqmatch?: SchemaLoadMatch, ctrl?: Control): Promise<SchemaEntity>;
}
export { SchemaEntity };
