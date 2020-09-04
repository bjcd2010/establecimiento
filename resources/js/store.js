import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)

export default new Vuex.Store({
    state:{
        pymes: [],
    },

    mutations:{
        GET_PYMES(state, pymes){
            state.pymes = pymes;
        }
    },

    actions:{

    }
})