import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
export const showLoginForm = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showLoginForm.url(options),
    method: 'get',
})

showLoginForm.definition = {
    methods: ["get","head"],
    url: '/customer/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
showLoginForm.url = (options?: RouteQueryOptions) => {




    return showLoginForm.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
showLoginForm.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showLoginForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
showLoginForm.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showLoginForm.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
const showLoginFormForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showLoginForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
showLoginFormForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showLoginForm.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::showLoginForm
* @see app/Http/Controllers/Customer/Auth/LoginController.php:12
* @route '/customer/login'
*/
showLoginFormForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: showLoginForm.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

showLoginForm.form = showLoginFormForm

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::login
* @see app/Http/Controllers/Customer/Auth/LoginController.php:17
* @route '/customer/login'
*/
export const login = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: login.url(options),
    method: 'post',
})

login.definition = {
    methods: ["post"],
    url: '/customer/login',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::login
* @see app/Http/Controllers/Customer/Auth/LoginController.php:17
* @route '/customer/login'
*/
login.url = (options?: RouteQueryOptions) => {




    return login.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::login
* @see app/Http/Controllers/Customer/Auth/LoginController.php:17
* @route '/customer/login'
*/
login.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: login.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::login
* @see app/Http/Controllers/Customer/Auth/LoginController.php:17
* @route '/customer/login'
*/
const loginForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: login.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::login
* @see app/Http/Controllers/Customer/Auth/LoginController.php:17
* @route '/customer/login'
*/
loginForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: login.url(options),
    method: 'post',
})

login.form = loginForm

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::logout
* @see app/Http/Controllers/Customer/Auth/LoginController.php:34
* @route '/customer/logout'
*/
export const logout = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

logout.definition = {
    methods: ["post"],
    url: '/customer/logout',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::logout
* @see app/Http/Controllers/Customer/Auth/LoginController.php:34
* @route '/customer/logout'
*/
logout.url = (options?: RouteQueryOptions) => {




    return logout.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::logout
* @see app/Http/Controllers/Customer/Auth/LoginController.php:34
* @route '/customer/logout'
*/
logout.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::logout
* @see app/Http/Controllers/Customer/Auth/LoginController.php:34
* @route '/customer/logout'
*/
const logoutForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: logout.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Customer\Auth\LoginController::logout
* @see app/Http/Controllers/Customer/Auth/LoginController.php:34
* @route '/customer/logout'
*/
logoutForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: logout.url(options),
    method: 'post',
})

logout.form = logoutForm

const LoginController = { showLoginForm, login, logout }

export default LoginController