import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
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

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
export const dashboard = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

dashboard.definition = {
    methods: ["get","head"],
    url: '/customer/dashboard',
} satisfies RouteDefinition<["get","head"]>

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
dashboard.url = (options?: RouteQueryOptions) => {




    return dashboard.definition.url + queryParams(options)
}

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
dashboard.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
dashboard.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: dashboard.url(options),
    method: 'head',
})

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
const dashboardForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
dashboardForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see routes/web.php:41
* @route '/customer/dashboard'
*/
dashboardForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

dashboard.form = dashboardForm



const customer = {
    login: Object.assign(login, login),
    logout: Object.assign(logout, logout),
    register: Object.assign(register, register),
    dashboard: Object.assign(dashboard, dashboard),
}

export default customer