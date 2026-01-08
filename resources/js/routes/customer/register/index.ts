import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
export const form = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

form.definition = {
    methods: ["get","head"],
    url: '/customer/register',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
form.url = (options?: RouteQueryOptions) => {




    return form.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
form.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
form.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: form.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
const formForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
formForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::form
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
formForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

form.form = formForm
