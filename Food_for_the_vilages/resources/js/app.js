fetch("/save", {
    method: "POST",
    body: data,
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    }
})