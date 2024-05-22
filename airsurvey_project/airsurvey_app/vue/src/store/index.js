import {createStore} from "vuex";

const store = createStore ({
    state: {
        user: {
            data: {name: 'Emmanuel Appiah', email: 'email@example.com'},
            token: null
        }
    },
    getters: {},
    actions: {},
    mutations: {},
    modules: {}
})

export default store;