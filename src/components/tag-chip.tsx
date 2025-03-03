import Link from 'next/link';

export default function TagChip() {
  return (
    <Link
      href={`/tags/`}
      className="bg-secondary-dark hover:bg-primary inline-flex items-center rounded-full px-3 py-2 pb-3 text-xs leading-0 text-white lowercase"
    >
      TypeScript
    </Link>
  );
}
