import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
export const form = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

form.definition = {
    methods: ["get","head"],
    url: '/customer/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
form.url = (options?: RouteQueryOptions) => {




    return form.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
form.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
form.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: form.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
const formForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
formForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::form
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
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
