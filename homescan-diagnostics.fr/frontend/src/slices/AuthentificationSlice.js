import { createApi, fetchBaseQuery } from "@reduxjs/toolkit/query/react"

export const ApiSlice = createApi({
    reducerPath: 'Api',
    baseQuery: fetchBaseQuery({ baseUrl: 'https://192.168.1.21:8000'}),
    endpoints: (builder) => ({
        postLogin: builder.mutation({
            query: ({ username, password }) => ({
                url: '/admin/authentification',
                method: 'POST',
                body: { username, password },
                // credentials: 'include',
            }),
            // invalidatesTags: [ 'ApiUser'],  
        }),
    })
})

export const { 
    usePostLoginMutation
} = ApiSlice