package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewQuoteEntityFunc func(client *RonSwansonQuotesSDK, entopts map[string]any) RonSwansonQuotesEntity

var NewSchemaEntityFunc func(client *RonSwansonQuotesSDK, entopts map[string]any) RonSwansonQuotesEntity

