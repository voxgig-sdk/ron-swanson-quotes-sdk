package core

type RonSwansonQuotesError struct {
	IsRonSwansonQuotesError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewRonSwansonQuotesError(code string, msg string, ctx *Context) *RonSwansonQuotesError {
	return &RonSwansonQuotesError{
		IsRonSwansonQuotesError: true,
		Sdk:              "RonSwansonQuotes",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *RonSwansonQuotesError) Error() string {
	return e.Msg
}
