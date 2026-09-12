import { RonSwansonQuotesEntityBase } from '../RonSwansonQuotesEntityBase';
import type { RonSwansonQuotesSDK } from '../RonSwansonQuotesSDK';
import type { Control } from '../types';
import type { Quote, QuoteLoadMatch, QuoteListMatch } from '../RonSwansonQuotesTypes';
declare class QuoteEntity extends RonSwansonQuotesEntityBase<Quote> {
    constructor(client: RonSwansonQuotesSDK, entopts: any);
    make(this: QuoteEntity): QuoteEntity;
    load(this: any, reqmatch?: QuoteLoadMatch, ctrl?: Control): Promise<QuoteEntity>;
    list(this: any, reqmatch?: QuoteListMatch, ctrl?: Control): Promise<QuoteEntity[]>;
}
export { QuoteEntity };
