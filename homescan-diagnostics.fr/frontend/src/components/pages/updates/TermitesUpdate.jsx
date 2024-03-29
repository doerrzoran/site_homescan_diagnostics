import { useEffect, useState } from "react";
import { useGetTermitesQuery } from "../../../slices/ApiSlice";
import { useUpdateTermitesMutation } from "../../../slices/UpdateSlice";

export default function TermitesUpdate() {
    const { data, loading } = useGetTermitesQuery()
    const [newTitle, setNewTitle] = useState(data?.title ?? '')
    const [newText, setNewText] = useState(data?.text ?? '')
    const [updatePage, { isLoading, isError }] = useUpdateTermitesMutation()

    useEffect(() => {
        if (data && data.title) {
            setNewTitle(data.title);
        }
        if (data && data.text) {
            setNewText(data.text);
        }
    }, [data]);

    const handleSubmit = (e) => {
        e.preventDefault();
        updatePage({ 
            title: newTitle,
            text: newText, 
        }); // Call the mutation with the new title
        setNewTitle(newTitle); // Clear the input field after submitting
        setNewText(newText);
         // Clear the input field after submitting
    };

  return (
    <div className="container">
    <div>
        <h2>modifier la page Amiante</h2>
        <form onSubmit={handleSubmit} className="mt-3">
            <div className="form-group">
                <label htmlFor="newTitle">Titre:</label>
                <input
                    type="text"
                    className="form-control"
                    id="newTitle"
                    value={newTitle}
                    onChange={(e) => setNewTitle(e.target.value)}
                />
            </div>
            <div className="form-group">
                <label htmlFor="newText">text:</label>
                <textarea
                    className="form-control"
                    id="newText"
                    rows="10"
                    cols="70"
                    value={newText}
                    onChange={(e) => setNewText(e.target.value)}>
                </textarea>
            </div>
            <button type="submit" className="btn btn-primary" disabled={isLoading}>
                {isLoading ? 'Modification en cours...' : 'Éditer'}
            </button>
            {isError && <p className="text-danger">Error updating.</p>}
        </form>
    </div>
</div>

  );
}
