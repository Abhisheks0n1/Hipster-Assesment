import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
export const showRegisterForm = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showRegisterForm.url(options),
    method: 'get',
})

showRegisterForm.definition = {
    methods: ["get","head"],
    url: '/customer/register',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
showRegisterForm.url = (options?: RouteQueryOptions) => {




    return showRegisterForm.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
showRegisterForm.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showRegisterForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
showRegisterForm.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showRegisterForm.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
const showRegisterFormForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showRegisterForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
showRegisterFormForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showRegisterForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::showRegisterForm
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:12
* @route '/customer/register'
*/
showRegisterFormForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showRegisterForm.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

showRegisterForm.form = showRegisterFormForm

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::register
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:17
* @route '/customer/register'
*/
export const register = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: register.url(options),
    method: 'post',
})

register.definition = {
    methods: ["post"],
    url: '/customer/register',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::register
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:17
* @route '/customer/register'
*/
register.url = (options?: RouteQueryOptions) => {




    return register.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::register
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:17
* @route '/customer/register'
*/
register.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: register.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::register
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:17
* @route '/customer/register'
*/
const registerForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: register.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\RegisterController::register
* @see app/Http/Controllers/Customer/Auth/RegisterController.php:17
* @route '/customer/register'
*/
registerForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: register.url(options),
    method: 'post',
})

register.form = registerForm

const RegisterController = { showRegisterForm, register }

export default RegisterController