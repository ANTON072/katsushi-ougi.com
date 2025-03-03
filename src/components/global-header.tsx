import { HomeIcon } from '@heroicons/react/24/outline';
import Link from 'next/link';

export default function GlobalHeader() {
  return (
    <header className="link-container mx-auto grid w-full max-w-5xl grid-cols-[1fr_auto] items-center px-6 py-10">
      <div>
        <h1 className="font-en text-shuttle-gray-dark text-4xl font-bold tracking-wider uppercase">
          <Link href="/">katsushi-ougi.com</Link>
        </h1>
        <p className="text-shuttle-gray-500 mt-1 text-sm">Life goes on.</p>
      </div>
      <nav>
        <ul className="font-en grid grid-flow-col items-center gap-8 capitalize">
          <li>
            <Link href="/">
              <HomeIcon className="size-6" />
            </Link>
          </li>
          <li>
            <Link href="/about">about</Link>
          </li>
          <li>
            <Link href="/archives">archives</Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}
