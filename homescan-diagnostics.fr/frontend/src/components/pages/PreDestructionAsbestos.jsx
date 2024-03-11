import { useEffect } from "react"
import { useGetPreDestructionAsbestosQuery } from "../../slices/ApiSlice"

export default function PreDestructionAsbestos() {
    const { data, isLoading} = useGetPreDestructionAsbestosQuery()

    useEffect(() => {
        console.log(data)
    })
    
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
