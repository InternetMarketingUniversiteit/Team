import { Model } from '@vuex-orm/core'

export default class User extends Model {
    static entity = 'users';

    static fields() {
        return {
            name: this.string(''),
        }
    }
}
