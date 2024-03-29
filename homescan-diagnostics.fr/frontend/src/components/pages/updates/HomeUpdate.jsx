import { useEffect, useState } from "react";
import { useUpdateHomePageMutation } from "../../../slices/UpdateSlice";
import { useGetHomeQuery } from "../../../slices/ApiSlice";

export default function HomeUpdate() {
    const { data, loading } = useGetHomeQuery()
    const [newTitle, setNewTitle] = useState(data?.title ?? '')
    const [newSubTitle, setNewSubTitle] = useState(data?.subtitle ?? '')
    const [updateHomePage, { isLoading, isError }] = useUpdateHomePageMutation();

    useEffect(() => {
        if (data && data.title) {
            setNewTitle(data.title);
        }
        if (data && data.subtitle) {
            setNewSubTitle(data.subtitle);
        }
    }, [data]);

    const handleSubmit = (e) => {
        e.preventDefault();
        updateHomePage({ 
            title: newTitle,
            subtitle: newSubTitle, 
        }); // Call the mutation with the new title
        setNewTitle(newTitle); // Clear the input field after submitting
        setNewSubTitle(newSubTitle);
         // Clear the input field after submitting
    };

  return (
    <div className="container">
    <div>
        <h2>modifier la page d'accueil</h2>
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
                <label htmlFor="newSubTitle">Sous-titre:</label>
                <textarea
                    className="form-control"
                    id="newSubTitle"
                    rows="3"
                    value={newSubTitle}
                    onChange={(e) => setNewSubTitle(e.target.value)}>
                </textarea>
            </div>
            <button type="submit" className="btn btn-primary" disabled={isLoading}>
                {isLoading ? 'Modification en cours...' : 'Éditer'}
            </button>
            {isError && <p className="text-danger">Error updating title.</p>}
        </form>
    </div>
</div>

  );
}
