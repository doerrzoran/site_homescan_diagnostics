import { createApi, fetchBaseQuery } from "@reduxjs/toolkit/query/react"

export const ApiSlice = createApi({
    reducerPath: 'Api',
    baseQuery: fetchBaseQuery({ baseUrl: 'https://127.0.0.1:8000'}),
    endpoints: (builder) => ({
        updateHomePage: builder.mutation({
            query: (updatedData) => ({
              url: `/home/update`, // Assuming you have an API endpoint for updating HomePage by ID
              method: 'POST', // Or 'POST' depending on your API design
              body: updatedData,
            }),
        }),
    })
})

export const { 
    useUpdateHomePageMutation
} = ApiSlice