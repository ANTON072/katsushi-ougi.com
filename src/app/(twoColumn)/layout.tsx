export default function TwoColumnLayout({ children }: { children: React.ReactNode }) {
  return (
    <div className="grid grid-cols-[1fr_250px] gap-8">
      <main>{children}</main>
      <aside className="grid gap-8 self-start">sidebar</aside>
    </div>
  );
}
