import Admin from './Admin'
import Customer from './Customer'


const Controllers = {
    Admin: Object.assign(Admin, Admin),
    Customer: Object.assign(Customer, Customer),
}

export default Controllers