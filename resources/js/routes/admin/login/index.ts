import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
export const form = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

form.definition = {
    methods: ["get","head"],
    url: '/admin/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
form.url = (options?: RouteQueryOptions) => {




    return form.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
form.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
form.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: form.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
const formForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
*/
formForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: form.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\Auth\LoginController::form
* @see app/Http/Controllers/Admin/Auth/LoginController.php:12
* @route '/admin/login'
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
