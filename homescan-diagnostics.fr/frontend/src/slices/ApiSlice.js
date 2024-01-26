import { createApi, fetchBaseQuery } from "@reduxjs/toolkit/query/react"

export const ApiSlice = createApi({
    reducerPath: 'Api',
    baseQuery: fetchBaseQuery({ baseUrl: 'https://127.0.0.1:8000'}),
    endpoints: (builder) => ({
        getHome : builder.query({
            query : () => ({
                url: '/home',
            })
        }),
        getContatcts : builder.query({
            query : () => ({
                url: '/contacts',
            })
        }),
        getInterventionSector : builder.query({
            query : () => ({
                url: '/intervention/sector',
            })
        }),
        getEstimate : builder.query({
            query : () => ({
                url: '/estimate',
            })
        }),
        getSkills : builder.query({
            query : () => ({
                url: '/skills',
            })
        }),
        getAssets : builder.query({
            query : () => ({
                url: '/assets',
            })
        }),
        getCondominium : builder.query({
            query : () => ({
                url: '/condominium',
            })
        }),
        getPreSell : builder.query({
            query : () => ({
                url: '/pre/sell',
            })
        }),
        getPreRent : builder.query({
            query : () => ({
                url: '/pre/rent',
            })
        }),
        getPreConstruction : builder.query({
            query : () => ({
                url: '/pre/construction',
            })
        }),
        getPostConstruction : builder.query({
            query : () => ({
                url: '/post/construction',
            })
        }),
        getPreDestruction : builder.query({
            query : () => ({
                url: '/pre/destruction',
            })
        }),
    })
})

export const { 
    useGetHomeQuery,
    useGetContatctsQuery,
    useGetInterventionSectorQuery, 
    useGetEstimateQuery,
    useGetSkillsQuery,
    useGetAssetsQuery ,
    useGetCondominiumQuery,
    useGetPreSellQuery,
    useGetPreRentQuery,
    useGetPreConstructionQuery,
    useGetPostConstructionQuery,
    useGetPreDestructionQuery
} = ApiSlice