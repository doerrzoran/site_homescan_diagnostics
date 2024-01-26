import { configureStore } from '@reduxjs/toolkit';
import { ApiSlice } from "./slices/ApiSlice";

export default configureStore({
    reducer: {
        'Api' : ApiSlice.reducer,
    },
    middleware: (getDefaultMiddleware) => {
        return getDefaultMiddleware().concat(ApiSlice.middleware)
    }
})