import { useGetElectricityQuery } from "../../slices/ApiSlice"

export default function Electricty() {
    const { data, isLoading} = useGetElectricityQuery()

    return(
        <>
            <div>
                {
                    isLoading ? <p>is loading</p>:
                    <div>

                        <h1>
                            {
                                data.title
                            }
                        </h1>
                        <p>
                            {
                                data.text
                            }
                        </p>
                    </div>
                }
            </div>
        </>
    )
}
