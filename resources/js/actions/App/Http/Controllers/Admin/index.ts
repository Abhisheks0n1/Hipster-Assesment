import Auth from './Auth'
import ProductController from './ProductController'


const Admin = {
    Auth: Object.assign(Auth, Auth),
    ProductController: Object.assign(ProductController, ProductController),
}

export default Admin